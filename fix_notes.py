
from app import create_app
from app.models import db, Interaction

NOTE_MAP = {
    "call": "Apel telefonic cu clientul.",
    "email": "Email trimis/recepționat cu clientul.",
    "meeting": "Întâlnire cu clientul."
}

app = create_app()
with app.app_context():
    total = 0
    for t, text in NOTE_MAP.items():
        updated = Interaction.query.filter(Interaction.type == t)\
            .update({Interaction.notes: text}, synchronize_session=False)
        db.session.commit()
        print(f"[OK] Actualizate {updated} interacțiuni de tip '{t}'.")
        total += updated
    print(f"[DONE] Total interacțiuni actualizate: {total}")
