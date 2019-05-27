import { Script } from "vm";

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
