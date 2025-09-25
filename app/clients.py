from flask import Blueprint, render_template, redirect, url_for, flash, request
from flask_login import login_required
from .models import db, Client, Interaction
from .forms import ClientForm, InteractionForm

clients_bp = Blueprint("clients", __name__, template_folder="templates")

@clients_bp.route("/")
@login_required
def list_clients():
    q = request.args.get("q","").strip()
    query = Client.query
    if q:
        like = f"%{q}%"
        query = query.filter(
            (Client.first_name.ilike(like)) | (Client.last_name.ilike(like)) | (Client.email.ilike(like))
        )
    clients = query.order_by(Client.created_at.desc()).limit(200).all()
    return render_template("clients/list.html", clients=clients, q=q)

@clients_bp.route("/new", methods=["GET","POST"])
@login_required
def new_client():
    form = ClientForm()
    if form.validate_on_submit():
        c = Client(
            first_name=form.first_name.data,
            last_name=form.last_name.data,
            email=form.email.data.lower(),
            phone=form.phone.data,
            address=form.address.data,
            status=form.status.data
        )
        db.session.add(c)
        db.session.commit()
        flash("Client adăugat.")
        return redirect(url_for("clients.list_clients"))
    return render_template("clients/form.html", form=form, title="Client nou")

@clients_bp.route("/<int:client_id>/edit", methods=["GET","POST"])
@login_required
def edit_client(client_id):
    c = Client.query.get_or_404(client_id)
    form = ClientForm(obj=c)
    if form.validate_on_submit():
        form.populate_obj(c)
        c.email = c.email.lower()
        db.session.commit()
        flash("Client actualizat.")
        return redirect(url_for("clients.list_clients"))
    return render_template("clients/form.html", form=form, title=f"Editează {c.first_name} {c.last_name}")

@clients_bp.route("/<int:client_id>/delete", methods=["POST"])
@login_required
def delete_client(client_id):
    c = Client.query.get_or_404(client_id)
    db.session.delete(c)
    db.session.commit()
    flash("Client șters.")
    return redirect(url_for("clients.list_clients"))

@clients_bp.route("/<int:client_id>", methods=["GET","POST"])
@login_required
def view_client(client_id):
    c = Client.query.get_or_404(client_id)
    form = InteractionForm()
    if form.validate_on_submit():
        inter = Interaction(client_id=c.id, type=form.type.data, notes=form.notes.data)
        db.session.add(inter)
        db.session.commit()
        flash("Interacțiune adăugată.")
        return redirect(url_for("clients.view_client", client_id=c.id))
    interactions = c.interactions
    return render_template("clients/view.html", client=c, form=form, interactions=interactions)
