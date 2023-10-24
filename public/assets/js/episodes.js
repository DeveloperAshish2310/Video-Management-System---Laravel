$(document).ready(function () {
    $("#show_name_ep").on("keyup", function () {
        var a = $(this).val(); // show Name input
        var b = $("#show_code"); // Show Code Input
        $.ajax({
            url: "fetch.php",
            type: "GET",
            data: {
                name: a
            },
            success: function (data) {
                b.val(data);
            },
            error: function () {
                alert('Error');
            }
        });
    });

    $("#addfield").click(function (e) {
        e.preventDefault();
        $("#fields").append(`
        <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="epi_name" class="form-label">Episode Number</label>
                        <input type="number" class="form-control" id="epi_name" name="epi_number[]"
                            placeholder="Enter Episode Name" autocomplete="off">
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="epi_code" class="form-label">Episode Code</label>
                        <input type="text" class="form-control" id="epi_code" name="epi_code[]"
                            placeholder="Enter Episode Code"  autocomplete="off">
                    </div>
                </div>
            </div>
        `);
    });

    $("#removefiled").click(function (e) {
        e.preventDefault();
        $("#fields .row:last-child").remove();
    });
});