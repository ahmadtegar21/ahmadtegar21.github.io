<!DOCTYPE Html>
<Html>
<Head>
    <Title>Upload Dan Download File PDF Dengan PHP Dan MySQL</Title>
</Head>
<Body Style="Width: 800px; Margin: Auto; Padding: 10px;">
    <H2 Style="Text-Align: Center;">Tabel Upload/Download File (PDF)</H2>
    <a href="Halaman_upload.php">Tambah</a>
    <Br /><Br />

    <Table Border="1" Style="Width: 100%; Border-Collapse: Collapse;">
        <Thead>
            <Tr>
                <Th Style="Width: 30px">No</Th>
                <Th Style="Width: 100px">Kode</Th>
                <Th>Nama</Th>
                <Th Style="Width: 100px">Type</Th>
                <Th Style="Width: 100px">Ukuran</Th>
                <Th Style="Width: 100px">Aksi</Th>
            </Tr>
        </Thead>
        <Tbody Style="Text-Align: Center;">
            <?Php
                Include 'Koneksi.php';
                $Nomor_urut = 0;
                $Result = SelectAllData();
                $CountData = Mysqli_num_rows($Result);

                If ($CountData < 1) { 
            ?>    
                    <Tr>
                        <Td Colspan="5" Style="Text-Align: Center; Font-Weight: Bold; Font-Size: 12px; Padding: 5px; Color: Red">TIDAK ADA DATA</Td>
                    </Tr>

            <?Php
                } Else {
                    While ($Row = Mysqli_fetch_assoc($Result)) {
                        $Nomor_urut = $Nomor_urut + 1;
            ?>
                        <Tr>
                            <Td><?php echo $Nomor_urut; ?></Td>
                            <Td><?php echo $Row['Kode_buku']; ?></Td>
                            <Td><?php echo $Row['Nama_buku']; ?></Td>
                            <Td><?php echo Strtoupper($Row['Ekstensi']) ?></Td>
                            <Td><?php echo Number_format($Row['Size']/(1024*1024), 2) ?>MB</Td>
                            <Td><A Href="DownloadFile.Php?Url=<?Php Echo $Row['Berkas']; ?>">Download</A></Td>
                        </Tr>
            <?Php 
                    }
                } 
            ?>
        </Tbody>
    </Table>
    
</Body>
</Html>