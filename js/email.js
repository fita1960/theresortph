function sendMail() {

    var params = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        mobileno: document.getElementById("mobileno").value,
        message: document.getElementById("message").value,
    };

    const serviceID = "service_1s7duto";
    const templateID = "template_2mu7dyh";

        emailjs
        .send(serviceID,templateID,params)
        .then((res) => {
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("mobileno").value = "";
            document.getElementById("message").value = "";
            alert("Message sent successfully!");
            window.location.assign('contact.php');
        })
        .catch((err) => console.log(err));


};

