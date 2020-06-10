const imageInput = $('#image_file');
const displayArea = $('#display_image');
const files = [];
// Validate the file
function validate() {
    
}

// Add the image in the list
function callAjax(data) {
    $.ajax({
        type: "POST",
        url: '/upload',
        data,
        processData: false,
        contentType: false,
        success: function(resp) {
            console.log(resp);
        },
        error: function(error) {
            console.error(error);
        }
    })
}


// Upload all image from the list
function upload() {
    const formData = new FormData();

    let _token = $('input[name=_token]').val();

    // adding csrf token in formData
    formData.append('_token', _token);

    for (let image of files ) {
        console.log(image);
        formData.append('photo[]', image);
    }

    callAjax(formData);
}


//  JQuery Event

// Add file in Preview
imageInput.change(function() {
    let reader = new FileReader();
    let image = this.files[0];

    reader.onload = function (e) {
        displayArea.append(`<img src='${e.target.result}' class='img-thumbnail' width='100px' height='100px'/> <br>`);
    };
    reader.readAsDataURL(image);

    files.push(image);
});

// Submit Images to Server
$('#submit').click(function(e) {
    e.preventDefault();

    upload();
});