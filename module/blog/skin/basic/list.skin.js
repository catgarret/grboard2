$(function(){
    $.material.init();

    $("#blogSearchForm").submit(function (e) {
        e.preventDefault();
        var value = $("#blogSearchText").val();
        if ($.trim(value) == "") {
            alert("�˻�� ��� �ֽ��ϴ�. �ٽ� Ȯ���� �ּ���!");
            return false;
        }
        var grboard = $(this).attr("rel");
        location.href = "/" + grboard + "/blog/search/all/" + value + "/1";
        return false;
    });
});