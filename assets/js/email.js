$(document).ready(function () {
    alertify.set('notifier', 'delay', 10)

    alertify.set('notifier', 'position', 'top-right')
    var mouseX = 0
    var mouseY = 0
    var popupCounter = 0

    document.addEventListener('mousemove', function (e) {
        mouseX = e.clientX
        mouseY = e.clientY
    })
    $(document).mouseleave(function () {
        if (mouseY < 100) {
            if (popupCounter < 1) {
                $('.popup-open-layout4').trigger('click')
            }
            popupCounter++
        }
    })

    $('.bannerForm').on('submit', function (e) {
        e.preventDefault()

        var name = $('.bannerForm input[name="name"]').val()
        var signup_email = $('.bannerForm input[name="email"]').val()
        var signup_phone = $('.bannerForm input[name="phone"]').val()
        var header = $('.bannerForm input[name="bannerHeader"]').val()

        if (!validateEmail(signup_email)) {
            alertify.error('Please Insert Correct Email')
            return false
        }
        if (name === '' || name === null) {
            alertify.error('Please Insert Name')
            return false
        }
        if (signup_phone === '' || signup_phone === null) {
            alertify.error('Please Insert Phone')
            return false
        }
        if (signup_email === '' || signup_email === null) {
            alertify.error('Please Insert Email')
            return false
        }

        if (signup_phone.length < 10 || signup_phone.length > 15) {
            alertify.error('Phone Length Must Be Greater Than 10 and less than 15')
            return false
        }

        formdata = new FormData()
        formdata.append('name', name)
        formdata.append('email', signup_email)
        formdata.append('country_phone', signup_phone)
        formdata.append('header', header)
        formdata.append('mode', 'bannerForm')

        var xmlHttp = new XMLHttpRequest()
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                var result = JSON.parse(xmlHttp.responseText)

                if (result.status == 1) {
                    alertify.success('Message Sent Successfully!')
                    setTimeout(function () {
                        location.href = '/order/thank-you/'
                    }, 2000)
                }
            }
        }

        xmlHttp.open('POST', '/data/data.php', true) // true for asynchronous
        xmlHttp.send(formdata ? formdata : form.serialize())
        for (let [key, value] of formdata) {
            // console.log(`${key}: ${value}`);
        }
        return false
    })

    $('.contact-form').on('submit', function (e) {
        e.preventDefault()

        var name = $('.contact-form input[name="name"]').val()
        var signup_email = $('.contact-form input[name="email"]').val()
        var signup_phone = $('.contact-form input[name="phone"]').val()
        var header = $('.contact-form input[name="header"]').val()
        var msg = $('.contact-form input[name="message"]').val()

        if (!validateEmail(signup_email)) {
            alertify.error('Please Insert Correct Email')
            return false
        }
        if (name === '' || name === null) {
            alertify.error('Please Insert Name')
            return false
        }
        if (signup_phone === '' || signup_phone === null) {
            alertify.error('Please Insert Phone')
            return false
        }
        if (signup_email === '' || signup_email === null) {
            alertify.error('Please Insert Email')
            return false
        }

        if (signup_phone.length < 10 || signup_phone.length > 15) {
            alertify.error('Phone Length Must Be Greater Than 10 and less than 15')
            return false
        }

        formdata = new FormData()
        formdata.append('name', name)
        formdata.append('email', signup_email)
        formdata.append('country_phone', signup_phone)
        formdata.append('header', header)
        formdata.append('msg', msg)
        formdata.append('mode', 'contactForm')

        var xmlHttp = new XMLHttpRequest()
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                var result = JSON.parse(xmlHttp.responseText)

                if (result.status == 1) {
                    alertify.success('Message Sent Successfully!')
                    setTimeout(function () {
                        location.href = '/order/thank-you/'
                    }, 2000)
                }
            }
        }

        xmlHttp.open('POST', '/data/data.php', true) // true for asynchronous
        xmlHttp.send(formdata ? formdata : form.serialize())
        for (let [key, value] of formdata) {
            // console.log(`${key}: ${value}`);
        }
        return false
    })

    $('.contact-pg-form').on('submit', function (e) {
        e.preventDefault()

        var name = $('.contact-pg-form input[name="name"]').val()
        var signup_email = $('.contact-pg-form input[name="email"]').val()
        var signup_phone = $('.contact-pg-form input[name="phone"]').val()
        var header = $('.contact-pg-form input[name="header"]').val()
        var msg = $('.contact-pg-form input[name="message"]').val()
        var subject = $('.contact-pg-form input[name="subject"]').val()

        if (!validateEmail(signup_email)) {
            alertify.error('Please Insert Correct Email')
            return false
        }
        if (name === '' || name === null) {
            alertify.error('Please Insert Name')
            return false
        }
        if (signup_phone === '' || signup_phone === null) {
            alertify.error('Please Insert Phone')
            return false
        }
        if (signup_email === '' || signup_email === null) {
            alertify.error('Please Insert Email')
            return false
        }

        if (signup_phone.length < 10 || signup_phone.length > 15) {
            alertify.error('Phone Length Must Be Greater Than 10 and less than 15')
            return false
        }

        formdata = new FormData()
        formdata.append('name', name)
        formdata.append('email', signup_email)
        formdata.append('country_phone', signup_phone)
        formdata.append('header', header)
        formdata.append('msg', msg)
        formdata.append('subject', subject)
        formdata.append('mode', 'contactPgForm')

        var xmlHttp = new XMLHttpRequest()
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                var result = JSON.parse(xmlHttp.responseText)

                if (result.status == 1) {
                    alertify.success('Message Sent Successfully!')
                    setTimeout(function () {
                        location.href = '/order/thank-you/'
                    }, 2000)
                }
            }
        }

        xmlHttp.open('POST', '/data/data.php', true) // true for asynchronous
        xmlHttp.send(formdata ? formdata : form.serialize())
        for (let [key, value] of formdata) {
            // console.log(`${key}: ${value}`);
        }
        return false
    })

    $('.popupForm').on('submit', function (e) {
        e.preventDefault()

        var name = $('.popupForm input[name="name"]').val()
        var signup_email = $('.popupForm input[name="email"]').val()
        var signup_phone = $('.popupForm input[name="phone"]').val()
        var header = $('.popupForm input[name="header"]').val()
        var msg = $('.popupForm input[name="message"]').val()
        var time = $('.popupForm input[name="time"]').val()

        if (!validateEmail(signup_email)) {
            alertify.error('Please Insert Correct Email')
            return false
        }
        if (name === '' || name === null) {
            alertify.error('Please Insert Name')
            return false
        }
        if (signup_phone === '' || signup_phone === null) {
            alertify.error('Please Insert Phone')
            return false
        }
        if (signup_email === '' || signup_email === null) {
            alertify.error('Please Insert Email')
            return false
        }

        if (signup_phone.length < 10 || signup_phone.length > 15) {
            alertify.error('Phone Length Must Be Greater Than 10 and less than 15')
            return false
        }

        formdata = new FormData()
        formdata.append('name', name)
        formdata.append('email', signup_email)
        formdata.append('country_phone', signup_phone)
        formdata.append('header', header)
        formdata.append('msg', msg)
        formdata.append('time', time)
        formdata.append('mode', 'popupForm')

        var xmlHttp = new XMLHttpRequest()
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                var result = JSON.parse(xmlHttp.responseText)

                if (result.status == 1) {
                    alertify.success('Message Sent Successfully!')
                    setTimeout(function () {
                        location.href = '/order/thank-you/'
                    }, 2000)
                }
            }
        }

        xmlHttp.open('POST', '/data/data.php', true) // true for asynchronous
        xmlHttp.send(formdata ? formdata : form.serialize())
        for (let [key, value] of formdata) {
            // console.log(`${key}: ${value}`);
        }
        return false
    })

    $('.lpForm').on('submit', function (e) {
        $('.loading').addClass('active')
        e.preventDefault()

        var name = $('.lpForm input[name="name"]').val()
        var signup_email = $('.lpForm input[name="email"]').val()
        var signup_phone = $('.lpForm input[name="phone"]').val()
        var header = $('.lpForm input[name="header"]').val()
        var msg = $('.lpForm input[name="msg"]').val()

        if (!validateEmail(signup_email)) {
            $('.loading').removeClass('active')
            alertify.error('Please Insert Correct Email')
            return false
        }
        if (name === '' || name === null) {
            $('.loading').removeClass('active')
            alertify.error('Please Insert Name')
            return false
        }
        if (signup_phone === '' || signup_phone === null) {
            $('.loading').removeClass('active')
            alertify.error('Please Insert Phone')
            return false
        }
        if (signup_email === '' || signup_email === null) {
            $('.loading').removeClass('active')
            alertify.error('Please Insert Email')
            return false
        }

        if (signup_phone.length < 10 || signup_phone.length > 15) {
            $('.loading').removeClass('active')
            alertify.error('Phone Length Must Be Greater Than 10 and less than 15')
            return false
        }

        formdata = new FormData()
        formdata.append('name', name)
        formdata.append('email', signup_email)
        formdata.append('country_phone', signup_phone)
        formdata.append('header', header)
        formdata.append('msg', msg)
        formdata.append('mode', 'lpForm')

        var xmlHttp = new XMLHttpRequest()
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                var result = JSON.parse(xmlHttp.responseText)

                if (result.status == 1) {
                    $('.loading').removeClass('active')
                    alertify.success('Message Sent Successfully!')
                    setTimeout(function () {
                        location.href = '/order/thank-you/'
                    }, 2000)
                }
            }
        }

        xmlHttp.open('POST', '/data/data.php', true) // true for asynchronous
        xmlHttp.send(formdata ? formdata : form.serialize())
        for (let [key, value] of formdata) {
            // console.log(`${key}: ${value}`);
        }
        return false
    })

})

function validateEmail(emailAdress) {
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    if (emailAdress.match(regexEmail)) {
        return true
    } else {
        return false
    }
}

function isNumber(evt) {
    evt = evt ? evt : window.event
    var charCode = evt.which ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false
    }
    return true
}

function alphabetvalidation(evt) {
    evt = evt ? evt : window.event
    var charCode = evt.which ? evt.which : evt.keyCode
    if (
        charCode > 31 &&
        (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)
    ) {
        return false
    }
    return true
}
