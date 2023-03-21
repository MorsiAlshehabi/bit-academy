import rewards
lootbox = {"COMMON":0, "RARE":0, "EPIC":0, "LEGENDARY":0}

for i in range(5):
    skin = rewards.get_new_skin()
    lootbox[skin] += 1

for key, value in lootbox.items():
    if value > 0:
        print(str(value)+"x",key.lower())