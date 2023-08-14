# Python program to convert an image to grayscale image

import sys
from PIL import Image

imageFile = sys.argv[1]
image = Image.open(imageFile)
grayScaleImage = image.convert("L")
# print(grayScaleImage.paste)
grayScaleImage.save("GrayScale" + imageFile)
