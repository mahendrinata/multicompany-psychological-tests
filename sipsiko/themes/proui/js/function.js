function slugify(from, to) {
    trimmed = $.trim($(from).val());
    if (typeof $(to).attr('readonly') != 'undefined') {
        slug = trimmed.toLowerCase().
                replace(/[^a-z0-9-]/gi, '-').
                replace(/-+/g, '-').
                replace(/^-|-$/g, '');
        $(to).val(slug);
    }
}

function removeReadOnly(el) {
    console.log($(el).attr('readonly'));
    if (typeof $(el).attr('readonly') == 'undefined') {
        $(el).attr('readonly', 'readonly');
    } else {
        $(el).removeAttr('readonly');
    }
}