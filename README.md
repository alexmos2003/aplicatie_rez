# CRM Licență (Flask + MySQL)

## 1) Cerințe
- Python 3.10+
- MySQL Server 8+/9+

## 2) Instalare
```bash
python -m venv .venv
. .venv/Scripts/activate  # Windows
pip install -r requirements.txt
```

## 3) Configurare conexiune DB
Copiază `.env.example` în `.env` și setează:
```
FLASK_SECRET_KEY=schimba-asta
SQLALCHEMY_DATABASE_URI=mysql+pymysql://crm_user:Licenta2025!@localhost:3306/crm_db?charset=utf8mb4
FLASK_ENV=development
```

## 4) Rulare
```bash
python run.py
```

Deschide http://127.0.0.1:5000/login și accesează o dată http://127.0.0.1:5000/init-admin
ca să creezi utilizatorul admin implicit:
```
email: admin@example.com
parola: admin123
```
