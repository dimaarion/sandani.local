(this.webpackJsonpsandani=this.webpackJsonpsandani||[]).push([[0],{13:function(e,t,a){},29:function(e,t,a){e.exports=a(60)},34:function(e,t,a){},35:function(e,t,a){},36:function(e,t,a){},59:function(e,t,a){},60:function(e,t,a){"use strict";a.r(t);var n=a(0),c=a.n(n),r=a(26),l=a.n(r),s=(a(34),a(5)),i=(a(35),a(1)),m=a(9),o=(a(36),a(8)),u=a.n(o),d="http://sandani.local",E=function(e){var t=[];for(var a in e)t[a]=e[a];return t};function v(e,t){u.a.get(d+"/api/getdb/getartrow.php?alias="+t).then((function(t){e({data:t.data,status:t.status})}))}var p=function(e){return c.a.createElement("nav",{id:"menu",style:{marginTop:"60px"}},c.a.createElement("ul",{className:"nav justify-content-end"},E(e.menu).map((function(t,a){return c.a.createElement("li",{className:"nav-item",key:a},c.a.createElement(i.c,{className:"nav-link",exact:!0,to:"".concat(t.menu_alias),activeStyle:{borderBottom:"solid 2px green"},style:{color:"rgb(65, 77, 66)",fontSize:"13pt"},onMouseOver:function(){return e.setstate({lin:!0,podMenu:E(t.cild)})}},t.menu_name),c.a.createElement("div",null))}))))};var f=function(){return c.a.createElement("div",{className:"container-fluid"},c.a.createElement("div",{className:"text-center"},c.a.createElement("h1",{className:"err"},"404"),c.a.createElement("h2",{className:"err2"},"\u0421\u0442\u0440\u0430\u043d\u0438\u0446\u0430 \u043d\u0435 \u043d\u0430\u0439\u0434\u0435\u043d\u0430."),c.a.createElement("h2",{className:"err2"},"\u0412\u043e\u0437\u043c\u043e\u0436\u043d\u043e \u0412\u044b \u043f\u044b\u0442\u0430\u043b\u0438\u0441\u044c \u043e\u0442\u043a\u0440\u044b\u0442\u044c \u043d\u0435\u0441\u0443\u0449\u0435\u0441\u0442\u0432\u0443\u044e\u0449\u0443\u044e \u0438\u043b\u0438 \u0443\u0434\u0430\u043b\u0435\u043d\u043d\u0443\u044e \u0441\u0442\u0440\u0430\u043d\u0438\u0446\u0443. \u041f\u043e\u043f\u0440\u043e\u0431\u0443\u0439\u0442\u0435 \u0432\u0435\u0440\u0445\u043d\u044e\u044e \u043d\u0430\u0432\u0438\u0433\u0430\u0446\u0438\u044e.")))};a(13);var g=function(e){return c.a.createElement("div",null,c.a.createElement("div",{className:"boot col-3 text-center p-0 mt-3 "},c.a.createElement("div",{className:"bootbg"}),c.a.createElement(i.b,{to:e.alias},"\u041f\u043e\u0434\u0440\u043e\u0431\u043d\u0435\u0435...")))};var N=function(e){return c.a.createElement("div",{className:"container-fluid"},c.a.createElement("h2",{className:"text-center p-5 mt-5"},c.a.createElement(i.b,{to:e.art_alias},e.art_name)),c.a.createElement("div",{className:"row container-fluid"},c.a.createElement("div",{className:"col-sm"},c.a.createElement("div",{className:"text-center"},c.a.createElement(i.b,{to:e.art_alias},c.a.createElement("img",{style:{borderRadius:"10px"},width:"100%",src:"/img/window/".concat(e.art_img),alt:e.art_name})))),c.a.createElement("div",{className:"col"},c.a.createElement("div",{className:" text-sm-left",style:{fontSize:"16pt"}},e.art_subcontent),c.a.createElement(g,{alias:e.art_alias}))))};var _=function(e){return c.a.createElement("div",{key:e.art_id,className:"col-sm pt-5"},c.a.createElement("h3",{className:"h3 pb-2 text-center"},e.art_name),c.a.createElement("div",{className:"text-center imagearts"},c.a.createElement(i.b,{to:e.art_alias},c.a.createElement("img",{src:"/img/window/".concat(e.art_img),alt:e.art_name}))))};var h=function(){var e=Object(n.useState)({data:[{}],status:0}),t=Object(s.a)(e,2),a=t[0],r=t[1];return Object(n.useEffect)((function(){v(r,"/")}),[]),c.a.createElement("div",{className:"col-sm"},200===a.status?c.a.createElement("div",null,c.a.createElement("img",{width:"100%",src:"/img/slider/blvol.png",alt:"slider"}),c.a.createElement("div",{className:"row "},E(a.data).map((function(e,t){return"1"===e.params?c.a.createElement(N,{key:e.art_id+2,art_name:e.art_name,art_alias:e.art_alias,art_img:e.art_img,art_subcontent:e.art_subcontent}):c.a.createElement(_,{key:e.art_id+4,art_name:e.art_name,art_alias:e.art_alias,art_img:e.art_img,art_subcontent:e.art_subcontent})})))):"")};var b=function(e){var t=Object(n.useState)({data:[{}],status:0}),a=Object(s.a)(t,2),r=a[0],l=a[1],m=Object(n.useState)({data:[{}],status:0}),o=Object(s.a)(m,2),E=o[0],p=o[1];return Object(n.useEffect)((function(){var t,a;v(l,e.match.url),t=p,a=e.match.url,u.a.get(d+"/api/getdb/articlesalias.php?art_alias="+a).then((function(e){t({data:e.data,status:e.status})}))}),[e.match.url]),c.a.createElement("div",{className:"container-fluid"},0!==r.data.length?c.a.createElement("div",null,200===r.status?c.a.createElement("div",{className:"row "},r.data.map((function(e,t){return 0===t?c.a.createElement("div",{key:t+66,className:"container-fluid"},c.a.createElement("h2",{className:"text-center p-5 mt-5"},c.a.createElement(i.b,{to:e.art_alias},e.art_name)),c.a.createElement("div",{className:"container"},c.a.createElement("div",{className:"text-center"},c.a.createElement(i.b,{to:e.art_alias},c.a.createElement("img",{style:{borderRadius:"10px"},width:"100%",src:"/img/window/".concat(e.art_img),alt:e.art_name})))),c.a.createElement("div",{className:"container-fluid"},c.a.createElement("div",{className:" text-sm-left",style:{fontSize:"16pt"}},e.art_content))):c.a.createElement(_,{key:e.art_id+2,art_name:e.art_name,art_alias:e.art_alias,art_img:e.art_img,art_subcontent:e.art_subcontent})}))):""):c.a.createElement("div",{className:"container-fluid"},c.a.createElement("h2",{className:"text-center p-5 mt-5"},E.data.art_name),c.a.createElement("div",{className:"container"},c.a.createElement("div",{className:"text-center"},c.a.createElement("img",{style:{borderRadius:"10px"},width:"100%",src:"/img/window/".concat(E.data.art_img),alt:E.data.art_name}))),c.a.createElement("div",{className:"container-fluid"},c.a.createElement("div",{className:" text-sm-left",style:{fontSize:"16pt"}},E.data.art_content))))};a(59);var y=function(e){return c.a.createElement("div",{id:"load"},c.a.createElement("img",{src:"/img/icon/5.gif",alt:"icon"}))};var w=function(e){return c.a.createElement("div",{id:"logo",style:{height:"100px",marginTop:"20px"}},c.a.createElement(i.b,{to:"/"},c.a.createElement("img",{src:"/img/icon/".concat(e.logotype.logo),style:{width:"299px"},alt:"\u043e\u043e\u043e sandani \u041e\u043a\u043d\u0430 \u0438 \u0434\u0432\u0435\u0440\u0438"})))};var x=function(e){return c.a.createElement("div",{className:"container-fluid p-0",style:{height:"100px",backgroundColor:"#009559",marginTop:"50px"}})};var O=function(){var e,t=Object(n.useState)({data:[{}],status:0}),a=Object(s.a)(t,2),r=a[0],l=a[1],o=Object(n.useState)({data:[{}],status:0}),v=Object(s.a)(o,2),g=v[0],N=v[1],_=Object(n.useState)({data:[{}],status:0}),O=Object(s.a)(_,2),j=O[0],S=O[1],k=Object(n.useState)({data:[{}],status:0}),M=Object(s.a)(k,2),z=M[0],T=M[1],B=Object(n.useState)({data:[{}],status:0}),R=Object(s.a)(B,2),C=R[0],I=R[1],J=Object(n.useState)({lin:!1,podMenu:[{}]}),W=Object(s.a)(J,2),A=W[0],D=W[1],H=Object(n.useState)(0),L=Object(s.a)(H,2),Y=L[0],$=L[1];return Object(n.useEffect)((function(){var e;e=l,u.a.get(d+"/api/getdb/menupublic.php").then((function(t){e({data:t.data,status:t.status})})),function(e){u.a.get("/api/db/logo.json").then((function(t){e({data:t.data,status:t.status})}))}(N),function(e){u.a.get(d+"/api/getdb/menu.php").then((function(t){e({data:t.data,status:t.status})}))}(T),function(e){u.a.get(d+"/api/getdb/connectpanel.php").then((function(t){e({data:t.data,status:t.status})}))}(I),function(e){u.a.get(d+"/api/getdb/articles.php").then((function(t){e({data:t.data,status:t.status})}))}(S)}),[]),document.onscroll=function(){$(window.scrollY+"/"+window.innerHeight)},e={},c.a.createElement("div",{className:"App container-fluid p-0",style:e},c.a.createElement("div",{className:"row justify-content-md-center"},c.a.createElement("div",{className:"col col-lg-1"}),c.a.createElement("div",{className:"col-sm-2"},c.a.createElement(w,{logotype:g.data})),c.a.createElement("div",{className:"col-sm"},c.a.createElement(p,{menu:r.data,setstate:D})),c.a.createElement("div",{className:"col col-lg-1"})),c.a.createElement("div",{style:{height:"1px",width:"100%",backgroundColor:"#cccccc",marginTop:"-4px"}}),!0===A.lin&&0!==A.podMenu.length?c.a.createElement("div",{onMouseOver:function(){return D({lin:!0,podMenu:A.podMenu})},className:"container mt-4 podmenu"},c.a.createElement("div",{className:"row text-left"},E(A.podMenu).map((function(e,t){return c.a.createElement("div",{className:"col-sm-3 p-4",key:t+55},c.a.createElement("div",{className:"col-sm item_head"},c.a.createElement(i.c,{activeStyle:{textDecorationLine:"revert"},onMouseOver:function(){return D({lin:!0})},to:"".concat(e.menu_alias)},e.menu_name)),0!==E(e.cild).length?function e(t){var a=arguments.length>1&&void 0!==arguments[1]?arguments[1]:function(){};return 0!==E(t.cild).length?c.a.createElement("ul",{className:"nav flex-column",onMouseOver:function(){return a({lin:!0})}},E(t.cild).map((function(t,n){return c.a.createElement("li",{className:"nav-item",onMouseOver:function(){return a({lin:!0})},key:t.menu_id},c.a.createElement(i.c,{className:"nav-link item_lin",onMouseOver:function(){return a({lin:!0})},to:"".concat(t.menu_alias),style:{fontSize:"12pt"},activeStyle:{color:"#2ca612"}},t.menu_name),e(t))}))):""}(e,D):"")}))),c.a.createElement("div",{onMouseOut:function(){return D({lin:!1,podMenu:[]})},className:"container ",style:{height:"20px",zIndex:1e3}})):"",c.a.createElement("div",{className:"container"},c.a.createElement("div",{className:"row p-4"},200===C.status?C.data.map((function(e){return c.a.createElement("div",{className:"col-sm ",key:e.id+23},c.a.createElement("div",{className:"row"},c.a.createElement("div",{className:"col-sm-3"},c.a.createElement("img",{width:"70px",src:"/img/icon/".concat(e.img),alt:e.names})),c.a.createElement("div",{className:"col-sm-8",style:{fontSize:"18pt"}},e.names)))})):"")),c.a.createElement("div",{className:"row justify-content-md-center"},c.a.createElement("div",{className:"col col-lg-1"}),c.a.createElement("div",{className:"col-sm"},200===r.status?c.a.createElement(m.c,null,c.a.createElement(m.a,{exact:!0,path:"/",component:h}),z.data.map((function(e,t){return c.a.createElement(m.a,{key:t+22,path:"/".concat(e.menu_alias),component:b})})),j.data.map((function(e,t){return c.a.createElement(m.a,{key:t+22,path:"/".concat(e.art_alias),component:b})})),c.a.createElement(m.a,{component:f})):c.a.createElement(y,null)),c.a.createElement("div",{className:"col col-lg-1"})),Y>"100"?c.a.createElement(x,null):"")};Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/));l.a.render(c.a.createElement(c.a.StrictMode,null,c.a.createElement(i.a,null,c.a.createElement(O,null))),document.getElementById("root")),"serviceWorker"in navigator&&navigator.serviceWorker.ready.then((function(e){e.unregister()})).catch((function(e){console.error(e.message)}))}},[[29,1,2]]]);
//# sourceMappingURL=main.0ea26f48.chunk.js.map