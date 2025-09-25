from flask import Flask
from .config import Config
from .models import db
from flask_login import LoginManager
from .models import User

login_manager = LoginManager()
login_manager.login_view = "auth.login"

@login_manager.user_loader
def load_user(user_id):
    try:
        return User.query.get(int(user_id))
    except Exception:
        return None

def create_app():
    app = Flask(__name__)
    app.config.from_object(Config)
    db.init_app(app)
    login_manager.init_app(app)

    from .auth import auth_bp
    from .clients import clients_bp
    from .main import main_bp

    app.register_blueprint(auth_bp)
    app.register_blueprint(clients_bp, url_prefix="/clients")
    app.register_blueprint(main_bp)

    with app.app_context():
        db.create_all()

    return app
