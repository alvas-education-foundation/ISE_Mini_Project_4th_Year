import skimage.io as io
import matplotlib.pyplot as plot 
import numpy as np 
imp = io.imread('img1.jpg')
plt.imshow()
plt.show()
img.shape
#split
red =img[:,:,0]
green = img[:,:,1]
blue = img[:,:,2]

plt.imshow(red, cmap="Red")
plt.show()

plt.imshow(green, cmap="Green")
plt.show()

plt.imshow(blue, cmap="blue")
plt.show()

def filtering(img,f=3):
	#dimensions
	(rows,col,channels) = img.shape

	#initialize hyper parametr
	stride = 2
	n_rows = int(1+(rows-f)/stride)
	n_col = int(1+(col -f)/stride)
	n_channels = channels

	#output matrix A
	n_img = np.zeros((n_rows,n_col,n_channels))

	#iterate img

	for h in range(n_rows):
		for w in range(n_col):
			for c in range(n_channels):
				vert_start = h*stride
				vert_end = vert_start+f
				horiz_start = w*stride
				horiz_end = horiz_start +f

				#extract slice we are dealing with
				n_slice = img[vert_start:vert_end,horiz_start:horiz_end]

				#compute the filtering operation on the slice
				n_img[h,w,c]= np.mean(n_slice,dtype=int)
	return n_img

A = filtering(img)
print(A.shape)
plt.imshow(A)
plt.show()

A = filtering(img,f=11)
print(A.shape)
plt.imshow(A)
plt.show()

A = filtering(img,f=25)
print(A.shape)
plt.imshow(A)
plt.show()

