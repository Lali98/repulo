def xyw():
    xyw = []

    with open("xyw.txt", "r") as r:
        for sor in r:
            adat = sor.strip()
            for betu in adat:
                xyw.append(betu)

    x, y, w = 0, 0, 0

    for betu in xyw:
        if betu == "X":
            x += 1
        elif betu == "Y":
            y += 1
        elif betu == "W":
            w += 1

    ossz = x + y - w
    return ossz
