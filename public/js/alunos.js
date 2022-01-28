// API JSON para buscar dados através do CEP 

$("#inputCEP").focusout(function () {
    $.ajax({
        url: 'https://viacep.com.br/ws/' + $('#inputCEP').val() + '/json/unicode/',
        dataType: 'json',
        success: function (resposta) {
            if (resposta.erro){
                $('#inputCEP').removeAttr('class');
                $('#inputCEP').attr('class', 'form-control form-control-sm is-invalid');
                $("#logradouro").val('');
                $("#complemento").val('');
                $("#bairro").val('');
                $("#cidade").val('');
                $("#uf").val('');
            } else{
                $('#inputCEP').removeAttr('class');
                $('#inputCEP').attr('class', 'form-control form-control-sm is-valid');
                $("#logradouro").val(resposta.logradouro);
                $("#complemento").val(resposta.complemento);
                $("#bairro").val(resposta.bairro);
                $("#cidade").val(resposta.localidade);
                $("#uf").val(resposta.uf);
                $("#numero").focus();
            }
        }
    });
});

// Controlando design do formulário

$('#inputCEP').keyup(function (e) { 
    if ($('#inputCEP').val() > 0 && $('#inputCEP').val().length < 8) {
        $('#inputCEP').removeAttr('class');
        $('#inputCEP').attr('class', 'form-control form-control-sm is-warning');
    } else if ($('#inputCEP').val().length > 8) {
        $('#inputCEP').removeAttr('class');
        $('#inputCEP').attr('class', 'form-control form-control-sm is-invalid');
    } else {
        $('#inputCEP').removeAttr('class');
        $('#inputCEP').attr('class', 'form-control form-control-sm');
    }
});

// CADASTRO 
$('#dados').submit(function (e) { 
    e.preventDefault();

    var form = $(this).submit(function (e) {
        return;
    });
    var formData = new FormData(form[0]);

// Enviando formulário via Ajax 

    $.ajax({
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            // Upload progress
            xhr.upload.addEventListener("progress", function (evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    //Do something with upload progress
                    $('#progressBarSubmit').css('width', (percentComplete * 100).toFixed(1) + '%');
                    $('#progressBarSubmit').html((percentComplete * 100).toFixed(1) + " %");
                    if (percentComplete == 1) {
                        $('#progressBarSubmit').html('UPLOAD COMPLETO');
                        setTimeout(() => {
                            $('#progressBarSubmit').html('');
                            $('#progressBarSubmit').css('width', '0%');
                        }, 1000);
                    }
                }
            }, false);
            return xhr;
        },
        type: "post",
        url: $(this).attr('action'),
        data: formData,
        success: function (response) {
            $("input").val("");
            $('.nameImg').html('');
            $('#previewImg').removeAttr('src');
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: 'Enviado com sucesso',
            })
        },
        contentType: false,
        processData: false,
        cache: false
    });
    return false;
});

// EDITAR

$('#edit').submit(function (e) {
    e.preventDefault();

    var form = $(this).submit(function (e) {
        return;
    });
    var formData = new FormData(form[0]);

    // Enviando formulário via Ajax 

    $.ajax({
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            // Upload progress
            xhr.upload.addEventListener("progress", function (evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    //Do something with upload progress
                    $('#progressBarSubmit').css('width', (percentComplete * 100).toFixed(1) + '%');
                    $('#progressBarSubmit').html((percentComplete * 100).toFixed(1) + " %");
                    if (percentComplete == 1) {
                        $('#progressBarSubmit').html('UPLOAD COMPLETO');
                        setTimeout(() => {
                            $('#progressBarSubmit').html('');
                            $('#progressBarSubmit').css('width', '0%');
                        }, 1000);
                    }
                }
            }, false);
            return xhr;
        },
        type: "post",
        url: $(this).attr('action'),
        data: formData,
        success: function (response) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: 'Enviado com sucesso',
            })
        },
        contentType: false,
        processData: false,
        cache: false
    });
    return false;
});

const previewImg = document.getElementById("previewImg");
const fileChooser = document.getElementById("img");

// Reduzindo o tamanho da imagem enviada para preview
if (fileChooser) {
    fileChooser.onchange = e => {
        const fileToUpload = e.target.files.item(0);
        // Barrando imagens maiores do que 5MB 
        if (fileToUpload.size <= 5000000) {
            const reader = new FileReader();
            reader.readAsDataURL(fileToUpload);
            reader.onload = event => {
                compress(event.target.result, {
                    width: 400,
                    type: 'image/png',
                    max: 500,
                    min: 20,
                    quality: 0.5
                }).then(result => {
                    // Inserindo imagem nova no input e preview 
                    previewImg.src = result;
                    var fd = new FormData();
                    fd.append('img', result);
                    $('.nameImg').html(fileToUpload.name);
                });
            };
        } else {
            // Toast de erro 
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: 'Sua imagem excedeu o tamanho máximo de 5mb, escolha uma imagem menor!'
            })
        }
    };
}

// Função compressora de imagens 

function compress(base64, options) {
    return new Promise(function (resolve, reject) {
        var type = options.type,
            width = options.width,
            min = options.min,
            max = options.max;
        var img = new Image();
        var quality = 0.6;
        img.src = base64;
        img.setAttribute('crossOrigin', 'Anonymous');
        var imgWidth, imgHeight;

        img.onload = function () {
            imgWidth = img.width;
            imgHeight = img.height;
            var canvas = document.createElement('canvas');
            var ctx = canvas.getContext('2d');

            if (Math.max(imgWidth, imgHeight) > width) {
                if (imgWidth > imgHeight) {
                    canvas.width = width;
                    canvas.height = width * imgHeight / imgWidth;
                } else {
                    canvas.height = width;
                    canvas.width = width * imgWidth / imgHeight;
                }
            } else {
                canvas.width = imgWidth;
                canvas.height = imgHeight;
                quality = 0.6;
            }

            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            var base64 = canvas.toDataURL(type, quality);

            while (base64.length / 1024 > max) {
                quality -= 0.01;
                base64 = canvas.toDataURL(type, quality);
            }

            while (base64.length / 1024 < min) {
                quality += 0.001;
                base64 = canvas.toDataURL(type, quality);
            }

            resolve(base64);
        };

        img.onerror = function () {
            reject();
        };
    });
}

// Delete via ajax 

$(".delete").click(function (e) { 
    e.preventDefault();
    var alert = window.confirm("Você realmente deseja excluir esse aluno?");
    if (alert) {
        $.ajax({
            type: "post",
            url: "/alunos/excluir/"+$(this).val(),
            data: {'id_aluno': $(this).val()},
            success: function (response) {
                // adicionando session de delete e atualizando a página
                sessionStorage.Alert = "delete";
                location.reload();
            }
        });
    }
});

// Toast de exclusão de alunos
$(document).ready(function () {
    if (sessionStorage.getItem("Alert") == 'delete') {
        sessionStorage.Alert = "";
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'success',
            title: 'Usuário excluído com sucesso!'
        })
    }
});


