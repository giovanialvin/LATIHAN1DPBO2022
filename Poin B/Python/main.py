from hashlib import new
from SoccerClub import SoccerClub

# input metode pertama
Team1 = SoccerClub()
Team1.setNama("Avenger Assemble")
Team1.setYear("2023")
Team1.setNation("MCU")
Team1.setPlayers(["Captain Rogers", "Point Break", "Strongerst Avenger", "Rabbit"])

Team1.setTrophy("Best Soccer", "2020", "Cup")

Team1.Output()
Team1.getTrophy().OutputInner()

print("\n")

#input metode kedua
Team2 = SoccerClub("What If United", "2021", "MCU", ["Captain Britain", "Ultravision", "Watu"])
Team2.Output()
Team2.setTrophy("Best Series Team", "2021", "League")
Team2.getTrophy().OutputInner()