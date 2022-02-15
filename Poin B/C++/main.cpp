#include <iostream>
#include <string>
#include <vector>
#include "SoccerClub.cpp"

using namespace std;

int main(){
    //input cara 1
	SoccerClub Team1;
    //masukkan nilai vektor dari belakang
	vector<string> arrPlayers;
    arrPlayers.push_back("Okoye");
    arrPlayers.push_back("N'Jobu");
    arrPlayers.push_back("Nakia");

	Team1.setName("Wakanda FC");
	Team1.setNation("Wakanda");
	Team1.setYear("1991");
	Team1.setPlayers(arrPlayers);

	// output
	Team1.output();

    cout << endl;

    //input cara 2
    //masukkan nilai vektor dari belakang
	vector<string> arrPlayers2;
	arrPlayers2.push_back("Arthur");
	arrPlayers2.push_back("Clark Kent");
	arrPlayers2.push_back("Bruce Wayne");
	arrPlayers2.push_back("Zoro");

    SoccerClub Team2("Justice Football Team", "DCEU", "1988", arrPlayers2);
    Team2.output();
	
    return 0;
}
