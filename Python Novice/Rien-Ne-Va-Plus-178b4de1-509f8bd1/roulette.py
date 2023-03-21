from random import randint

def getNumber() -> int:
    ''' Krijg een nummer tussen 1 tm 36'''
    return randint(1,36)

def getBets(chips) -> []:
    bets = []
    print(f"Je hebt {chips} chips!")
    print("Op welke nummers wil je inzetten?")
    while chips:
        bet = input()
        if bet.isnumeric():
            bets.append(bet)
            chips -= 1
        elif bet == 'STOP':
            break
    return bets, chips


player_chips = 10
gameOn = True

while gameOn:
    player_bets, player_chips = getBets(player_chips)
    print("rien ne va plus")
    number = getNumber()
    print(f"De uitkomst is {number}")
    for player_bet in player_bets:
        if player_bet == number:
            player_chips += 35

    if player_chips == 0:
        gameOn = False
        print("GAME OVER")
        