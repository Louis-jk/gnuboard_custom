// 각 board 별 QueryString값 추출하여 Snb값 찾아내는 함수
$(document).ready(function () {
  const urlParams = new URLSearchParams(window.location.search);
  let query = urlParams.get("bo_table");
  console.log(query);
  $("." + query).addClass("active");
});
