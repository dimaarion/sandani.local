m = {
    pregStr: [/[0-9]/g, /\</g, /\>/g, /\//g, /\./g, /\,/g, /\"/g, /\'/g, /\:/g, /\;/g],
    pregMail: [/\</g, /\>/g, /\//g, /\,/g, /\"/g, /\'/g, /\:/g, /\;/g],
    pregTel: [/[a-z_A-Z_а-я_А-Я]/g, /\</g, /\>/g, /\//g, /\./g, /\,/g, /\"/g, /\'/g, /\:/g, /\;/g, /\-/g, /\(/g, /\)/g, /\ /g],
    pregMailf: /([0-9_a-z_A-Z\.]+)\@([0-9_a-z_A-Z]+)\.([0-9_a-z_A-Z]+)/g,
    getid(id) {
        return document.getElementById(id);
    },

    createEl(e, cild, attribute = [], attributes = []) {
        e = document.createElement(e);
        document.body.appendChild(e);
        if (attribute.length > 0) {

            attribute.map((x, i) => {

                e.setAttribute(x, attributes[i]);
            })
        }


        return cild.appendChild(e);
    },

    keyup(e, input, inners, r, sm) {
        let colors = "green";
        e.onkeyup = (e) => {
            input.value = e.target.value.length;
           
           
            
            if (sm == 'str') { 
                m.getid('namespan').style.color = colors;
                inners.innerHTML = ' : ' + m.filterStr(e.target.value, m.pregStr, r);
                e.target.value = m.filterStr(e.target.value, m.pregStr, r);
            }
            if (sm == 'strTexttheme') {
                e.target.value = m.filterStr(e.target.value, m.pregMail, r);
                if (e.target.value) {
                    m.getid('spantheme').innerHTML = '';
                }

            }
            if (sm == 'strTextmessage') {
                e.target.value = m.filterStr(e.target.value, m.pregMail, r);
                if (e.target.value) {
                    m.getid('spanmessage').innerHTML = '';
                }

            }
            if (sm == 'mail') {
                m.getid('mailspan').style.color = colors;
                let fMail = m.filterStr(e.target.value, m.pregMail, r);
                let errMail = fMail.match(m.pregMailf);
                if (errMail) {
                    errMail = ' : ' + errMail[0];
                }

                inners.innerHTML = ' : ' + (errMail !== null) ? errMail : '';
                e.target.value = fMail;
            }
            if (sm == 'tel') { 
                m.getid('telspan').style.color = colors;
                let h = []
                let filter = m.filterStr(e.target.value, m.pregTel, r);
                filter = filter.replace(/[0-9]{1}/, '0');
                let g = filter.split('');
                let v;
                for (let i = 0; i < g.length; i++) {

                    if (i == 0) {
                        h.push(g[i], ' ')
                    }
                    if (i == 1) {
                        h.push('(', g[i])
                    }
                    if (i > 1 && i < 4) {
                        h.push(g[i])
                    }
                    if (i == 4) {
                        h.push(')', ' ', g[i])
                    }
                    if (i > 4 && i < 7) {
                        h.push(g[i])
                    }

                    if (i == 7) {
                        h.push(' ', g[i], '-')
                    }
                    if (i == 8) {
                        h.push(g[i])
                    }
                    if (i == 9) {
                        h.push(g[i], '-')
                    }
                    if (i > 9 && i < 12) {
                        h.push(g[i])
                    }

                }

                v = e.target.value;

                if (v = h.join('').length == 15) {
                    v = h.join('').replace(/\-/, '');
                    inners.innerHTML = ' : ' + h.join('').replace(/\-/, '');
                } else {
                    v = h.join('');
                    inners.innerHTML = ' : ' + h.join('');
                }
                e.target.value = v;
            }

        }
    },

    filterStr(e = '', preg = [], r) {
        preg.map((x, i) => {
            e = e.replace(x, r);
        })
        return e;
    },

    kursors() {
        let t = { h: 0 }
        document.onclick = (e) => {
            if (e.clientX > 0 && e.clientY > 0) {
                t.h = t.h + 1;
            }

            if (t.h == 1) {
                m.keyup(m.getid('username'), m.createEl('input', m.getid('form_message'), ['name', 'type'], ['namehidden', 'hidden']), m.getid('namespan'), '', 'str');
                m.keyup(m.getid('usertel'), m.createEl('input', m.getid('form_message'), ['name', 'type'], ['telhidden', 'hidden']), m.getid('telspan'), '', 'tel');
                m.keyup(m.getid('usermail'), m.createEl('input', m.getid('form_message'), ['name', 'type'], ['mailhidden', 'hidden']), m.getid('mailspan'), '', 'mail');
                m.keyup(m.getid('theme'), m.createEl('input', m.getid('form_message'), ['name', 'type'], ['themehidden', 'hidden']), m.getid('theme'), '', 'strTexttheme');
                m.keyup(m.getid('message'), m.createEl('input', m.getid('form_message'), ['name', 'type'], ['messagehidden', 'hidden']), m.getid('message'), '', 'strTextmessage');
                m.createEl('span', document.getElementsByTagName('label')[3], ['id'], ['spantheme']);
                m.createEl('span', document.getElementsByTagName('label')[4], ['id'], ['spanmessage']);
                m.submitMessage(t.h);
            }

        }

    },
    submitMessage(e) {
        let f = m.getid('form_message');
        let username = m.getid('username');
        let usertel = m.getid('usertel');
        let usermail = m.getid('usermail');
        let theme = m.getid('theme');
        let message = m.getid('message');
        let fl;
        
        f.onsubmit = (event) => {
           
            if (!username.value) {
                m.getid('namespan').innerHTML = "Напишите ваше имя.";
                m.getid('namespan').style.color = 'red';
                event.preventDefault()
            }
            if (!usertel.value) {
                m.getid('telspan').innerHTML = "Напишите ваш номер телефона.";
                m.getid('telspan').style.color = 'red';
                event.preventDefault()
            }
            if (!usermail.value) {

                m.getid('mailspan').innerHTML = "Напишите вашу почту.";
                m.getid('mailspan').style.color = 'red';
                event.preventDefault();
            } else {
                fl = usermail.value.match(m.pregMailf);
                if (fl) {
                    fl = fl[0];
                }
                if (!fl) {
                    m.getid('mailspan').innerHTML = "Напишите вашу почту.";
                    m.getid('mailspan').style.color = 'red';
                    event.preventDefault()
                }
            }

            if (!theme.value) {
                m.getid('spantheme').innerHTML = ' Напишите тему письма.';
                m.getid('spantheme').style.color = 'red';
                event.preventDefault()
            }

            if (!message.value) {
                m.getid('spanmessage').innerHTML = ' Напишите содержание письма.';
                m.getid('spanmessage').style.color = 'red';
                event.preventDefault()
            }

        }





    }
}




m.kursors();

