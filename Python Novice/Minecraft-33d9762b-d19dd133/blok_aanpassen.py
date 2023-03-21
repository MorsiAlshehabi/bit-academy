import json

with open("gras_blok.json") as json_file:
    blok_dict = json.load(json_file)

blok_dict['block']['snow']  = True
blok_dict['block']['coordinates']['y'] += 66
blok_dict['block']['coordinates']['z'] *= 3

with open('sneeuw_blok.json', 'w') as outfile:
    json.dump(blok_dict, outfile)
    