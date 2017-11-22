<?php declare(strict_types=1);

/**
 * A comparison function, which imposes a total ordering on some collection of
 * objects. Comparators can be passed to a sort method to allow precise control
 * over the sort order. Comparators can also be used to control the order of
 * certain data structures (such as sorted sets or sorted maps), or to provide
 * an ordering for collections of objects that don't have a natural ordering.
 */
interface Comparator/*<T>*/
{
	/**
	 * Compares its two arguments for order. Returns a negative integer, zero,
	 * or a positive integer as the first argument is less than, equal to, or
	 * greater than the second. In the foregoing description, the notation
	 * sgn(expression) designates the mathematical signum function, which is
	 * defined to return one of -1, 0, or 1 according to whether the value of
	 * expression is negative, zero or positive.
	 *
	 * The implementor must ensure that sgn(compare(x, y)) == -sgn(compare(y,
	 * x)) for all x and y. (This implies that compare(x, y) must throw an
	 * exception if and only if compare(y, x) throws an exception.)
	 *
	 * The implementor must also ensure that the relation is transitive:
	 * ((compare(x, y)>0) && (compare(y, z)>0)) implies compare(x, z)>0.
	 *
	 * Finally, the implementor must ensure that compare(x, y)==0 implies that
	 * sgn(compare(x, z))==sgn(compare(y, z)) for all z.
	 *
	 * It is generally the case, but not strictly required that (compare(x,
	 * y)==0) == (x.equals(y)). Generally speaking, any comparator that
	 * violates this condition should clearly indicate this fact. The
	 * recommended language is "Note: this comparator imposes orderings that
	 * are inconsistent with equals."
	 *
	 * @param object $o1 the first object to be compared
	 * @param object $o2 the second object to be compared
	 * @return int a negative integer, zero, or a positive integer as the first
	 *     argument is less than, equal to, or greater than the second.
	 * @link https://docs.oracle.com/javase/8/docs/api/java/util/Comparator.html#compare-T-T-
	 */
	public function compare(/*T*/ $o1, /*T*/ $o2): int;
}
