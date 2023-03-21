from datetime import datetime

year = int(input("Wat is het jaar?\n"))
month = int(input("Wat is het maandnummer?\n"))
day = int(input("Wat is de dag?\n"))

user_date = datetime(year,month,day)
current_date = datetime.now()

print(user_date - current_date)
