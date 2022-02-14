from mimetypes import init


class SoccerClub:
    # attribute
    __Nama = ""
    __Nation = ""
    __Year = ""
    __Players = ""

    def __init__(self, Namac = "", Nationc = "", Yearc = "", Playersc = ""):
        self.__Nama = Namac
        self.__Nation = Nationc
        self.__Year = Yearc
        self.__Players = Playersc

    def setNama(self, Namac):
        self.__Nama = Namac

    def getNama(self):
        return self.__Nama

    def setNation(self, Nationc):
        self.__Nation = Nationc

    def getNation(self):
        return self.__Nation

    def setYear(self, Yearc):
        self.__Year = Yearc

    def getYear(self):
        return self.__Year

    def setPlayers(self, Playersc):
        self.__Players = Playersc

    def getPlayers(self):
        return self.__Players

    class Trophy:
        __NamaKejuaraan = ""
        __Tahun = ""
        __Tipe = ""

        def __init__(self, NamaKejuaraanc = "", Tahunc=0, Tipec=""):
            self.__NamaKejuaraan = NamaKejuaraanc
            self.__Tahun = Tahunc
            self.__Tipe = Tipec

        def setNamaKejuaraan(self, NamaKejuaraanc):
            self.__NamaKejuaraan = NamaKejuaraanc

        def getNamaKejuaraan(self):
            return self.__NamaKejuaraan

        def setTahun(self, Tahunc):
            self.__Tahun = Tahunc

        def getTahun(self):
            return self.__Tahun

        def setTipe(self, Tipec):
            self.__Tipe = Tipec

        def getTipe(self):
            return self.__Tipe

        def OutputInner(self):
            print("Nama Kejuaraan   : " + self.__NamaKejuaraan)
            print("Tahun            : " + self.__Tahun)
            print("Tipe             : " + self.__Tipe)

    __Tp = Trophy()

    def setTrophy(self, NamaKejuaraan, Tahun, Tipe):
        self.__Tp.setNamaKejuaraan(NamaKejuaraan)
        self.__Tp.setTipe(Tipe)
        self.__Tp.setTahun(Tahun)

    def getTrophy(self):
        return self.__Tp

        # print method

    def Output(self):
        print("Team Name    : " + self.getNama())
        print("Country      : " + self.getNation())
        print("Established  : " + self.getYear())
        print("Players      :")
        for i in self.getPlayers():
            print("               - " + i)