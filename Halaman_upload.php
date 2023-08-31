<!DOCTYPE Html>
<Html>
<Head>
    <Title>Upload Dan Download File PDF Dengan PHP Dan MySQL</Title>
</Head>
<Body Style="Width: 800px; Margin: Auto; Padding: 10px;">
    <H2 Style="Text-Align: Center;">Form Upload File (PDF)</H2>
    <Hr>
    <Form Action="ScriptFileUpload.Php" Method="Post" Enctype="Multipart/Form-Data">
        <B>Kode Buku :</B>
        <Input Type="Text" Name="Kode" Value="" Placeholder=""><Br /><Br />
        <B>Nama Buku:</B>
        <Input Type="Text" Name="Nama" Value="" Placeholder=""><Br /><Br />
        <B>Upload File :</B>
        <Input Type="File" Name="Berkas" Accept="Application/Pdf">
        <Button Type="Submit">Upload File</Button>
    </Form>
    <Hr>
</Body>
</Html>