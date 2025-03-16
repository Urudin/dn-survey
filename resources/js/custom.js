import { Fancybox } from "@fancyapps/ui";
import Swal from "sweetalert2";
window.Swal = Swal;

document.addEventListener("DOMContentLoaded", function () {
    Fancybox.bind(".popup-image", {
        groupAll: true,
        Thumbs: false,
        Toolbar: false
    });
});
