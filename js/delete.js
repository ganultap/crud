function onDelete(e) {
    let ans = confirm("Are you sure?");
    if (ans) {
        return true;
    } else {
        e.preventDefault();
    }
}