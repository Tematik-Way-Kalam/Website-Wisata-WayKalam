import pandas as pd
import matplotlib.pyplot as plt
from calendar import month_name
import MySQLdb

db = MySQLdb.connect(host="localhost", user="root", passwd="", db="wisata_way_kalam")
cursor = db.cursor()
cursor.execute("SELECT DISTINCT YEAR(tanggal) FROM statistik")
years = [str(row[0]) for row in cursor.fetchall()]
db.close()

df = pd.read_csv('data.csv')
df['tanggal'] = pd.to_datetime(df['tanggal'])
df['bulan'] = df['tanggal'].dt.month.map(lambda x: month_name[x])

for tahun in years:
    plt.figure(figsize=(5, 4))
    df_tahun = df[df['tanggal'].dt.year == int(tahun)]
    avg_per_hari = df_tahun.groupby('hari')['jumlah_pengunjung'].mean()
    avg_per_hari.plot(kind='bar', xlabel='Hari', ylabel='Rata-rata Pengunjung')
    plt.xticks(rotation='horizontal', fontsize=6)
    plt.savefig(f'plot_rata_rata_perhari_{tahun}.png')
    plt.close()

    plt.figure(figsize=(5, 4))
    tren_bulanan = df_tahun.groupby('bulan')['jumlah_pengunjung'].sum()
    bulan_names = [month_name[i] for i in range(1, 13)]
    tren_bulanan = tren_bulanan.reindex(bulan_names, fill_value=0)
    tren_bulanan.plot(kind='line', marker='o', xlabel='Bulan', ylabel='Total Pengunjung')
    plt.xticks(rotation='horizontal', fontsize=6)
    plt.savefig(f'tren_bulanan_{tahun}.png')
    plt.close()
