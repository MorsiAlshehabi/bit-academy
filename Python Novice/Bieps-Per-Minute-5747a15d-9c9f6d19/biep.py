import time
import schedule

def doBiep():
    print("Biep!")


while True:
    schedule.run_pending()
    time.sleep(60)

    doBiep()
    

#######    ###############
import time
import schedule


def say_biep():
    print("Biep!")


schedule.every().minute.do(say_biep)

while True:
    schedule.run_pending()
    time.sleep(1)
######################