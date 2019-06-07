function encodeImageFileAsURL(element, deploySelector) {
    var file = element.files[0];
    if (file == undefined) {
        $('#' + deploySelector).attr('src', $('#defaultImage').val());

        return false;
    }
    var reader = new FileReader();
    reader.onloadend = function() {
        $('#preview').attr('src', reader.result);
    }
    reader.readAsDataURL(file);
}

//load file2
var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var imgInp = document.getElementById('imgInp');
        imgInp.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};
