// tinymce.init({
//     selector: 'textarea',
//     plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
//     toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
//     toolbar_mode: 'floating',
//     tinycomments_mode: 'embedded',
//     tinycomments_author: 'Author name',
//   });

document.addEventListener('focusin', (e) => {
    if (e.target.closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root") !== null) {
      e.stopImmediatePropagation();
    }
  });

tinymce.init({
    selector: 'textarea',  // note the comma at the end of the line!
    height: 500,
    menubar: false,
    plugins: [
        'save','advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
        'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
        'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
    ],
    toolbar: 'save undo redo | bold italic underline strikethrough | forecolor backcolor |fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | image |outdent indent |  numlist bullist | removeformat ',
    toolbar_sticky: true,
    toolbar_mode: 'sliding'
  });