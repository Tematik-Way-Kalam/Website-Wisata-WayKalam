import numpy as np 
d1 = np.arange(11, 20)
d2 = np.arange(1, 10)
import matplotlib.pyplot as plt 
plt.scatter(d1, d2)
plt.savefig('plot.png')