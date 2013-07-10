

dw_fontSizerDX.doControlsSetup = true;

dw_fontSizerDX.sizeControls = [ { 

/////////////////////////////////////////////////////////////////////
////  settings for size increase link ////
    adjustment: 'increase',
        order: 1,
        image: 'images/plus.gif',
        text: '',
        title: 'Increase text size',
        alt: ''
/////////////////////////////////////////////////////////////////////

}, {   
/////////////////////////////////////////////////////////////////////
////  settings for size decrease link ////
    adjustment: 'decrease',
        order: 2,
        image: 'images/minus.gif',
        text: '',
        title: 'Decrease text size',
        alt: ''
/////////////////////////////////////////////////////////////////////

}, {   
/////////////////////////////////////////////////////////////////////
//// settings for (optional) reset link ////
    adjustment: 'reset',
        order: 3,
        image: 'images/reset.gif',
        text: '',
        title: 'Restore default text size',
        alt: ''
/////////////////////////////////////////////////////////////////////
}];

dw_fontSizerDX.setupControls = function () {
    var controls = dw_fontSizerDX.sizeControls;
    var sizerEl = document.getElementById( dw_fontSizerDX.sizerDivId );
    if ( !sizerEl ) return;
    // Null and string which can be converted to number will pass 
    controls.sort( function(a, b) { return a['order'] - b['order']; } );
    for (var i=0; controls[i]; i++) {
        dw_fontSizerDX.addControl( sizerEl, controls[i] )
    }
    sizerEl.style.display = "block";
}

dw_fontSizerDX.addControl = function (sizerEl, obj) {
    if ( typeof obj['order'] == 'object' || typeof parseInt(obj['order']) != 'number' ) {
        return; // Screen out null and non-numeric strings 
    }
    
    var a = document.createElement("a");
    sizerEl.appendChild(a);
    a.setAttribute('href', '');
    
    if ( obj['image'] ) {
        var img = document.createElement("img");
        a.appendChild(img); 
        if ( obj['title'] ) {
            img.setAttribute('title', obj['title'] );
        }
        img.setAttribute('src', obj['image'] );
        img.setAttribute('alt', obj['alt'] );
        img.setAttribute('border', '0');
        //img.style.marginRight = '2px';
    } else {
        var txt = document.createTextNode( obj['text'] );
        a.appendChild(txt);
    }
    
    if ( !dw_fontSizerDX.sizeIncrement ) {
        dw_fontSizerDX.getSizeIncrement();
    }
    
    switch ( obj['adjustment'] ) {
        case 'increase' :
            a.onclick = function () { dw_fontSizerDX.adjust( dw_fontSizerDX.sizeIncrement ); return false }
            break;
        case 'decrease' :
            a.onclick = function () { dw_fontSizerDX.adjust( -dw_fontSizerDX.sizeIncrement ); return false }
            break;
        case 'reset' :
            a.onclick = function () { dw_fontSizerDX.reset(); return false }
            break;
    }
}
