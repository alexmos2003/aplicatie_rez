from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, SubmitField, SelectField, TextAreaField
from wtforms.validators import DataRequired, Email, Length

class LoginForm(FlaskForm):
    email = StringField("Email", validators=[DataRequired(), Email()])
    password = PasswordField("Parolă", validators=[DataRequired()])
    submit = SubmitField("Autentificare")

class ClientForm(FlaskForm):
    first_name = StringField("Prenume", validators=[DataRequired(), Length(max=120)])
    last_name = StringField("Nume", validators=[DataRequired(), Length(max=120)])
    email = StringField("Email", validators=[DataRequired(), Email(), Length(max=255)])
    phone = StringField("Telefon", validators=[Length(max=50)])
    address = StringField("Adresă", validators=[Length(max=255)])
    status = SelectField("Status", choices=[("active","Activ"),("inactive","Inactiv")])
    submit = SubmitField("Salvează")

class InteractionForm(FlaskForm):
    type = SelectField("Tip", choices=[("call","Apel"),("email","Email"),("meeting","Întâlnire")])
    notes = TextAreaField("Note", validators=[Length(max=2000)])
    submit = SubmitField("Adaugă")
