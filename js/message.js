function message() {

    names = {
        username: document.getElementById('username'),
        form: document.getElementsByTagName('form')[0],
        c: 0,
        val: 'xxxx',
        chanc() {

            this.username = onkeyup = (e) => {
                this.c = e.target.value.length;
                names.input.setAttribute('name', 'usernamecountstr');
                names.input.value = this.c  
            }




        }

    }

    names.input = document.createElement('input');
    document.body.appendChild(names.input);
    names.form.appendChild(names.input);
    names.input.setAttribute('type', 'hidden');

    names.chanc();


}
message()