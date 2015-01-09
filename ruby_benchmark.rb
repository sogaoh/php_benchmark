# Coding: UTF-8
require 'date'

times = 100000000
puts "#{times}回ループします"

starttime = Time.now
startmin = starttime.min
startsec = starttime.sec
startusec = starttime.usec
startmsec = (startusec / 1000.0).round
puts "start : #{startmin}:#{startsec}.#{startmsec}"
i = 0
while i < times do
  ((0..9).to_a + ("a".."z").to_a + ("A".."Z").to_a).sample(10).join
  i += 1
end

endtime = Time.now
endmin = endtime.min
endsec = endtime.sec
endusec = endtime.usec
endmsec = (endusec / 1000.0).round
puts "end : #{endmin}:#{endsec}.#{endmsec}"

margin = (endmin * 60 + endsec) - (startmin * 60 + startsec)
marginmin = (margin / 60).truncate
marginsec = (margin - (marginmin * 60)).truncate
marginmsec = (endmsec - startmsec).abs
puts "margin : #{marginmin}:#{marginsec}.#{marginmsec}"
