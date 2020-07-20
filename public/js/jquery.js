$(".js-scroll").click(function () {
  $("html,body").animate({ scrollTop: $(".js-cards").offset().top }, 1000);
  $(".navigation__checkbox").prop("checked", false);
});

$(".js-scroll-about").click(function () {
  $("html,body").animate({ scrollTop: $(".js-about").offset().top }, 1000);

  $(".navigation__checkbox").prop("checked", false);
});

$(".js-scroll-benefits").click(function () {
  $("html,body").animate({ scrollTop: $(".js-benefits").offset().top }, 1000);
  $(".navigation__checkbox").prop("checked", false);
});

$(".js-scroll-test").click(function () {
  $("html,body").animate({ scrollTop: $(".js-test").offset().top }, 1000);
  $(".navigation__checkbox").prop("checked", false);
});

$(".js-scroll-book").click(function () {
  $("html,body").animate({ scrollTop: $(".js-book").offset().top }, 1000);
  $(".navigation__checkbox").prop("checked", false);
});

$("#booking").click(function () {
  $(".popup__content").css({ visibility: "hidden", opacity: 0 });
  $(".popup__booking").css({
    visibility: "visible",
    display: "table",
    opacity: 1,
    transform: "translate(-50%, -50%) scale(1)",
  });
});

$("#checkout").click(function (e) {
  let $name = $("#booking-name");
  let $email = $("#booking-email");
  let $phone = $("#booking-phone");
  if ($name.val() != "" || $email.val() != "" || $phone.val() != "") {
    $(".popup__content, .popup__booking").css({
      visibility: "hidden",
      opacity: 0,
    });

    $(".popup:target .popup__checkout").css({
      visibility: "visible",
      opacity: 1,
      transform: "translate(-50%, -50%) scale(1)",
      display: "table",
    });
  }
});
