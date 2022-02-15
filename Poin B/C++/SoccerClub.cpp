#include <iostream>
#include <string>
#include <vector>

using namespace std;

class SoccerClub{
    private:
        //atribut
        string name;
        string nation;
        string year;
        vector<string> players;

    public:
        SoccerClub(){
        }
        SoccerClub(string namec, string nationc, string yearc, vector<string> playersc){
            this->name = namec;
            this->nation = nationc;
            this->year = yearc;
            this->players.insert(this->players.end(), playersc.begin(), playersc.end());
        };

        //get set methods
        void setName(string namec){
            this->name = namec;
        }
        string getName(){
            return this->name;
        }
        void setNation(string nationc){
            this->nation = nationc;
        }
        string getNation(){
            return this->nation;
        }
        void setYear(string yearc){
            this->year = yearc;
        }
        string getYear(){
            return this->year;
        }
        void setPlayers(vector<string> playersc)
        {
            this->players.insert(this->players.end(), playersc.begin(), playersc.end());
        }
        vector<string> getPlayers(){
            return this->players;
        }
        

        void output(){
            cout << "Name Team      : " + this->getName() << endl;
            cout << "Country        : " + this->getNation() << endl;
            cout << "Established    : " + this->getYear() << endl;
            cout << "Players        : " << endl;
            int i = 0;

            for (i = 0; i<this->players.size(); i++){
                cout << "                   - " + this->players[i] << endl;
            }
    	}
    //Destructor
    ~SoccerClub();
};
