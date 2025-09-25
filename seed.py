import random
from faker import Faker
from app import create_app
from app.models import db, Client, Interaction

fake = Faker("ro_RO")

app = create_app()
app.app_context().push()

# adaugă 50 de clienți cu interacțiuni
for _ in range(50):
    c = Client(
        first_name=fake.first_name(),
        last_name=fake.last_name(),
        email=fake.unique.email(),
        phone=fake.phone_number(),
        address=fake.address(),
        status=random.choice(["active", "inactive"])
    )
    db.session.add(c)
    db.session.commit()

    # 1-5 interacțiuni pentru fiecare client
    for _ in range(random.randint(1, 5)):
        i = Interaction(
            client_id=c.id,
            type=random.choice(["call", "email", "meeting"]),
            notes=fake.sentence()
        )
        db.session.add(i)

db.session.commit()
print(">>> Am adăugat 50 de clienți demo cu interacțiuni!")
