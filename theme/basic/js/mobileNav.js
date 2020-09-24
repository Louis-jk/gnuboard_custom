$(document).ready(function () {
  $(".mobile_menu > ul > li").click(function () {
    $(this).find("ul").toggle(100);
  });

  $("#mobile_menu_close").click(function () {
    $("#aside").animate(
      {
        left: "-315px",
      },
      200
    );
    $(".aside_bk").hide();
    $(".close_menu").animate(
      {
        left: "-100px",
      },
      200
    );
  });
  $("#mobile_open").click(function () {
    $("#aside").animate(
      {
        left: "0px",
      },
      200
    );
    $(".aside_bk").show();
    $(".close_menu").animate(
      {
        left: "280px",
      },
      200
    );
  });
});
