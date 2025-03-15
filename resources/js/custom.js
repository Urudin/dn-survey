import { Fancybox } from "@fancyapps/ui";

document.addEventListener("DOMContentLoaded", function () {
    Fancybox.bind(".popup-image", {
        groupAll: true,
        Thumbs: false,
        Toolbar: false
    });
});
