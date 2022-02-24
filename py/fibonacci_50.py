def fibonacci():
    szam = [0, 1]

    for i in range(49):
        szam.append(szam[i] + szam[i + 1])

    legm = str(szam[-1])

    lista = [int(legm[0]), int(legm[-1])]
    return lista[1] - lista[0]
