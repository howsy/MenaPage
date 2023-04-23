const validate = new window.JustValidate('signup')

validate
.addField('name',[
    {
        rule:'requierd'
    }
])