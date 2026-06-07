window.printDiv = function (divId) {
    var printContents = document.getElementById(divId).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    document
        .querySelectorAll(".no-print")
        .forEach((el) => (el.style.display = "none"));
    window.print();

    document.body.innerHTML = originalContents;
};
