$(function() {

	var theDay = {
		month:  5,
		day:    18,
		hour:   9,
		minute: 0,
		second: 0
	};

	var getDayOfTheYear = function(aDate) {
		var months = [31, 28, 31, 30, 31, 30,
			      31, 31, 30, 31, 30, 31];

		var count = 0;
		for (var i = 0; i < aDate.month - 1; i++) {
			count += months[i];
		}
		return count + aDate.day;
	};

	var getSecondsOfTheYear = function(theDate) {
		return theDate.second
			+ theDate.minute * 60
			+ theDate.hour * 60 * 60
			+ (getDayOfTheYear(theDate) - 1) * 60 * 60 * 24;
	};


	var diffBetweenDates = function(to, from) {
		var seconds = getSecondsOfTheYear(to) - getSecondsOfTheYear(from);
		var days = Math.floor(seconds / (60 * 60 * 24));
		seconds -= days * (60 * 60 * 24);
		var hours = Math.floor(seconds / (60 * 60));
		seconds -= hours * (60 * 60);
		var minutes = Math.floor(seconds / 60);
		seconds -= minutes * 60;
		return {
			days: days,
			hours: hours,
			minutes: minutes,
			seconds: seconds
		};
	};

	var counter = function() {
		var right_now = new Date();

		var today = {
			month:  right_now.getMonth() + 1,
			day:    right_now.getDate(),
			hour:   right_now.getHours(),
			minute: right_now.getMinutes(),
			second: right_now.getSeconds()
		};

		var remaining = diffBetweenDates(theDay, today);
		$('.days_left').html(Math.floor(remaining.days / 10));
		$('.days_right').html(remaining.days % 10);
		$('.hours_left').html(Math.floor(remaining.hours / 10));
		$('.hours_right').html(remaining.hours % 10);
		$('.minutes_left').html(Math.floor(remaining.minutes / 10));
		$('.minutes_right').html(remaining.minutes % 10);
		$('.seconds_left').html(Math.floor(remaining.seconds / 10));
		$('.seconds_right').html(remaining.seconds % 10);

		setTimeout(counter, 1000);
	}

	counter();
});
