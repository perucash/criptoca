var data = JSON.stringify({
  "from": "InfoSMS",
  "to": "41793026727",
  "text": "Test SMS."
});

var xhr = new XMLHttpRequest();
xhr.withCredentials = false;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "https://api.infobip.com/sms/1/text/single");
xhr.setRequestHeader("authorization", "Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ==");
xhr.setRequestHeader("content-type", "application/json");
xhr.setRequestHeader("accept", "application/json");

xhr.send(data);