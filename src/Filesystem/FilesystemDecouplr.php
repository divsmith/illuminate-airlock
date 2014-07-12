<?php namespace LaravelDecouplr\Filesystem;

use Decouplr\Decouplr;
use Illuminate\Filesystem\Filesystem;

class FilesystemDecouplr extends Decouplr {

    public function __construct(Filesystem $files)
    {
        $this->decoupled = $files;
    }

    public function exists()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function get()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getRequire()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function requireOnce()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function put()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function prepend()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function append()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function delete()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function move()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function copy()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function extension()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function type()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function size()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function lastModified()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function isDirectory()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function isWritable()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function isFile()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function glob()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function files()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function allFiles()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function directories()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function makeDirectory()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function copyDirectory()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function deleteDirectory()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function cleanDirectory()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 