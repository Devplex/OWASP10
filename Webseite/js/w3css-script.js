/*****************************************************************************
    Datei:  w3css_script.js
    Autor:  Daniel Nagel
    eMail:  dnagel@fh-bielefeld.de
    Seit:   27.10.2017

    JavaScript um das Design der OWASP Top Ten Projektseite 'lebendiger'
    wirken zulassen.
 *****************************************************************************/

// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
