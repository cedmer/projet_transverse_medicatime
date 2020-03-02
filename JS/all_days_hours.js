let day_button = document.getElementsByName('every_day')
let hours_button = document.getElementsByName('every_hour')

day_button[0].addEventListener("click", function () {
    document.getElementsByName('1_jour')[0].checked = true
    document.getElementsByName('2_jour')[0].checked = true
    document.getElementsByName('3_jour')[0].checked = true
    document.getElementsByName('4_jour')[0].checked = true
    document.getElementsByName('5_jour')[0].checked = true
    document.getElementsByName('6_jour')[0].checked = true
    document.getElementsByName('7_jour')[0].checked = true
})

hours_button[0].addEventListener("click", function () {
    document.getElementsByName('8_check')[0].checked = true
    document.getElementsByName('10_check')[0].checked = true
    document.getElementsByName('12_check')[0].checked = true
    document.getElementsByName('14_check')[0].checked = true
    document.getElementsByName('16_check')[0].checked = true
    document.getElementsByName('18_check')[0].checked = true
    document.getElementsByName('20_check')[0].checked = true
    document.getElementsByName('nuit_check')[0].checked = true
})