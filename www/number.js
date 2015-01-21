/**
 * Created by Maxim Omelchenko on 15.01.2015 at 18:53.
 */
s('.__inputfield.__number').pageInit(function(fields) {
    // Create Number field instance with save handler
    SamsonCMS_InputField(fields);
});

var notAvailable = new Array();

// *
notAvailable.push(106);
// +
notAvailable.push(107);
// -
notAvailable.push(109);
// .
notAvailable.push(110);
// a-z
for (var i = 65; i <= 90; i++) {
    notAvailable.push(i);
}
// ; = , - . / `
for (i = 186; i <= 192; i++) {
    notAvailable.push(i);
}
// [ \ ] '
for (i = 219; i <= 222; i++) {
    notAvailable.push(i);
}

s('.__inputfield.__number input[type="number"]').keydown(function(input, obj, e){

    var number = input.DOMElement.value;

    if ((notAvailable.indexOf(e.keyCode) == -1 && !e.shiftKey) || (e.keyCode == 110 && number.indexOf('.') == -1)) {
        if (e.keyCode == 27) {
            input.blur();
        }
        return true;
    } else {
        if (e.keyCode == 189 || e.keyCode == 109) {
            input.DOMElement.value = -number;
        }
    }
    return false;
});

function getCursorPosition(obj){
    var domElement = obj.DOMElement;
    if (domElement.selectionStart){
        return domElement.selectionStart;
    } else {
        if (document.selection){
            var sel = document.selection.createRange();
            var clone = sel.duplicate();
            sel.collapse(true);
            clone.moveToElementText(domElement);
            clone.setEndPoint('EndToEnd', sel);
            return clone.text.length;
        }
    }
    return 0;
}