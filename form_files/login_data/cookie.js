function set_cookie(g,f,d,e){var b=new Date(),a,c;b.setTime(b.getTime()+((f||30)*24*60*60*1000));a="; expires="+b.toGMTString();for(c in g){document.cookie=c+"="+g[c]+a+"; domain="+(d||"douban.com")+"; path="+(e||"/")}}function get_cookie(b){var e=b+"=",a=document.cookie.split(";"),d,f;for(d=0;d<a.length;d++){f=a[d];while(f.charAt(0)==" "){f=f.substring(1,f.length)}if(f.indexOf(e)===0){return f.substring(e.length,f.length).replace(/\"/g,"")}}return null};