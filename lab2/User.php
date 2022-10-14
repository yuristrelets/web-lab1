<?

class User
{
    public function __construct(protected IStorage $storage)  { }

    public function setAvatar() 
    {
        // for example
        $this->storage->mkdir();
        $this->storage->createFile();
    }
}