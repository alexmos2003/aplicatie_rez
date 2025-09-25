from flask import Blueprint, render_template, redirect, url_for, flash
from flask_login import login_required
from .models import db, Client, Interaction
from datetime import datetime, timedelta

main_bp = Blueprint("main", __name__)

@main_bp.route("/")
@login_required
def dashboard():
    total_clients = Client.query.count()
    active_clients = Client.query.filter_by(status="active").count()
    inactive_clients = Client.query.filter_by(status="inactive").count()

    since = datetime.utcnow() - timedelta(days=30)
    calls = Interaction.query.filter(Interaction.type == "call", Interaction.when >= since).count()
    emails = Interaction.query.filter(Interaction.type == "email", Interaction.when >= since).count()
    meetings = Interaction.query.filter(Interaction.type == "meeting", Interaction.when >= since).count()

    # ultimele 10 interacțiuni
    recent = Interaction.query.order_by(Interaction.when.desc()).limit(10).all()

    return render_template(
        "dashboard.html",
        total_clients=total_clients,
        active_clients=active_clients,
        inactive_clients=inactive_clients,
        calls=calls,
        emails=emails,
        meetings=meetings,
        recent=recent,
    )
